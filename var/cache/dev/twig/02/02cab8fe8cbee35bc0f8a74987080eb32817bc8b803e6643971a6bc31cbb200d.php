<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_eb92d11bb7a962bba0ece8998d894640e3aebbdfbc7d7985ba426f75c182643a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5eaba051decf153b0fb058b9cd9b6ad91e15c4e35f896510081259145fc5df30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eaba051decf153b0fb058b9cd9b6ad91e15c4e35f896510081259145fc5df30->enter($__internal_5eaba051decf153b0fb058b9cd9b6ad91e15c4e35f896510081259145fc5df30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_5041f05214b495b8d556721ca87f909c75737fd86698c3e5a26590aad5c0fd83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5041f05214b495b8d556721ca87f909c75737fd86698c3e5a26590aad5c0fd83->enter($__internal_5041f05214b495b8d556721ca87f909c75737fd86698c3e5a26590aad5c0fd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5eaba051decf153b0fb058b9cd9b6ad91e15c4e35f896510081259145fc5df30->leave($__internal_5eaba051decf153b0fb058b9cd9b6ad91e15c4e35f896510081259145fc5df30_prof);

        
        $__internal_5041f05214b495b8d556721ca87f909c75737fd86698c3e5a26590aad5c0fd83->leave($__internal_5041f05214b495b8d556721ca87f909c75737fd86698c3e5a26590aad5c0fd83_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3449f6dfe68845ea024d1ae4bd7ccde2e006d311d08e1882927e4d61e615a55a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3449f6dfe68845ea024d1ae4bd7ccde2e006d311d08e1882927e4d61e615a55a->enter($__internal_3449f6dfe68845ea024d1ae4bd7ccde2e006d311d08e1882927e4d61e615a55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_d834846b314a83f6c76bf104583d3e64e0d30d5db03e2f74453bf61412b1e583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d834846b314a83f6c76bf104583d3e64e0d30d5db03e2f74453bf61412b1e583->enter($__internal_d834846b314a83f6c76bf104583d3e64e0d30d5db03e2f74453bf61412b1e583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_d834846b314a83f6c76bf104583d3e64e0d30d5db03e2f74453bf61412b1e583->leave($__internal_d834846b314a83f6c76bf104583d3e64e0d30d5db03e2f74453bf61412b1e583_prof);

        
        $__internal_3449f6dfe68845ea024d1ae4bd7ccde2e006d311d08e1882927e4d61e615a55a->leave($__internal_3449f6dfe68845ea024d1ae4bd7ccde2e006d311d08e1882927e4d61e615a55a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_52d02edb3af1a375bb3080b91e474d05b9217e518f685a817ae80b51e18c3477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d02edb3af1a375bb3080b91e474d05b9217e518f685a817ae80b51e18c3477->enter($__internal_52d02edb3af1a375bb3080b91e474d05b9217e518f685a817ae80b51e18c3477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_8b047054072d1c32c8f2053862ccd2fb1736e49648e019adfd1a310ac35382d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b047054072d1c32c8f2053862ccd2fb1736e49648e019adfd1a310ac35382d0->enter($__internal_8b047054072d1c32c8f2053862ccd2fb1736e49648e019adfd1a310ac35382d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8b047054072d1c32c8f2053862ccd2fb1736e49648e019adfd1a310ac35382d0->leave($__internal_8b047054072d1c32c8f2053862ccd2fb1736e49648e019adfd1a310ac35382d0_prof);

        
        $__internal_52d02edb3af1a375bb3080b91e474d05b9217e518f685a817ae80b51e18c3477->leave($__internal_52d02edb3af1a375bb3080b91e474d05b9217e518f685a817ae80b51e18c3477_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2826ae315c50e36874a1f0b065d5d4b7b3a3904e186253c632f4ac266cacf8d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2826ae315c50e36874a1f0b065d5d4b7b3a3904e186253c632f4ac266cacf8d9->enter($__internal_2826ae315c50e36874a1f0b065d5d4b7b3a3904e186253c632f4ac266cacf8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_172d289344cd046e66329cc14b565f4f564be63dd00183587ef062d9687e94fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172d289344cd046e66329cc14b565f4f564be63dd00183587ef062d9687e94fc->enter($__internal_172d289344cd046e66329cc14b565f4f564be63dd00183587ef062d9687e94fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_172d289344cd046e66329cc14b565f4f564be63dd00183587ef062d9687e94fc->leave($__internal_172d289344cd046e66329cc14b565f4f564be63dd00183587ef062d9687e94fc_prof);

        
        $__internal_2826ae315c50e36874a1f0b065d5d4b7b3a3904e186253c632f4ac266cacf8d9->leave($__internal_2826ae315c50e36874a1f0b065d5d4b7b3a3904e186253c632f4ac266cacf8d9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
