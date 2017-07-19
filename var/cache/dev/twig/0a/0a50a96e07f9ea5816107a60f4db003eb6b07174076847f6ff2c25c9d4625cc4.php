<?php

/* :email:email.txt.twig */
class __TwigTemplate_ad74fe1189ba55b9ffd934a958a8ab4393948957587f153e605eccb4d1f2fdaa extends Twig_Template
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
        $__internal_52e029f113cf13768cf65c4813f61f16596a487e17c032b84801bb7e77123d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52e029f113cf13768cf65c4813f61f16596a487e17c032b84801bb7e77123d62->enter($__internal_52e029f113cf13768cf65c4813f61f16596a487e17c032b84801bb7e77123d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":email:email.txt.twig"));

        $__internal_8833206465de7cd2687d91d9881494d8da70765a1cfeb5d400a8450c86c01dcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8833206465de7cd2687d91d9881494d8da70765a1cfeb5d400a8450c86c01dcd->enter($__internal_8833206465de7cd2687d91d9881494d8da70765a1cfeb5d400a8450c86c01dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":email:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_52e029f113cf13768cf65c4813f61f16596a487e17c032b84801bb7e77123d62->leave($__internal_52e029f113cf13768cf65c4813f61f16596a487e17c032b84801bb7e77123d62_prof);

        
        $__internal_8833206465de7cd2687d91d9881494d8da70765a1cfeb5d400a8450c86c01dcd->leave($__internal_8833206465de7cd2687d91d9881494d8da70765a1cfeb5d400a8450c86c01dcd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1ef885eac32b79e8a63113d960874a4fd043e6c62653ca11a05c99d987e9a1a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ef885eac32b79e8a63113d960874a4fd043e6c62653ca11a05c99d987e9a1a9->enter($__internal_1ef885eac32b79e8a63113d960874a4fd043e6c62653ca11a05c99d987e9a1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_161d36a61675bcf4ad22bdfea955504a5ce24426291c46610fbbf4c2d6bdd68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161d36a61675bcf4ad22bdfea955504a5ce24426291c46610fbbf4c2d6bdd68a->enter($__internal_161d36a61675bcf4ad22bdfea955504a5ce24426291c46610fbbf4c2d6bdd68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_161d36a61675bcf4ad22bdfea955504a5ce24426291c46610fbbf4c2d6bdd68a->leave($__internal_161d36a61675bcf4ad22bdfea955504a5ce24426291c46610fbbf4c2d6bdd68a_prof);

        
        $__internal_1ef885eac32b79e8a63113d960874a4fd043e6c62653ca11a05c99d987e9a1a9->leave($__internal_1ef885eac32b79e8a63113d960874a4fd043e6c62653ca11a05c99d987e9a1a9_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_28332ebabdcc91cc7b464a1161afbe95aba3b86089224ed3f0188a79f52fd99c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28332ebabdcc91cc7b464a1161afbe95aba3b86089224ed3f0188a79f52fd99c->enter($__internal_28332ebabdcc91cc7b464a1161afbe95aba3b86089224ed3f0188a79f52fd99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_e56db25c35cfe3d60ac285d997deaa11e3e592184885dcb4e08b8665e5ce42ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56db25c35cfe3d60ac285d997deaa11e3e592184885dcb4e08b8665e5ce42ad->enter($__internal_e56db25c35cfe3d60ac285d997deaa11e3e592184885dcb4e08b8665e5ce42ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e56db25c35cfe3d60ac285d997deaa11e3e592184885dcb4e08b8665e5ce42ad->leave($__internal_e56db25c35cfe3d60ac285d997deaa11e3e592184885dcb4e08b8665e5ce42ad_prof);

        
        $__internal_28332ebabdcc91cc7b464a1161afbe95aba3b86089224ed3f0188a79f52fd99c->leave($__internal_28332ebabdcc91cc7b464a1161afbe95aba3b86089224ed3f0188a79f52fd99c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3b523d5d6e1ca740abf5222545460a5b991b83cfcc5cf554f80c2d0652ebf02e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b523d5d6e1ca740abf5222545460a5b991b83cfcc5cf554f80c2d0652ebf02e->enter($__internal_3b523d5d6e1ca740abf5222545460a5b991b83cfcc5cf554f80c2d0652ebf02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_172b7a757ed166818cf040813b3fe498d8266d294ad5c2cb603214258e5ed51c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172b7a757ed166818cf040813b3fe498d8266d294ad5c2cb603214258e5ed51c->enter($__internal_172b7a757ed166818cf040813b3fe498d8266d294ad5c2cb603214258e5ed51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_172b7a757ed166818cf040813b3fe498d8266d294ad5c2cb603214258e5ed51c->leave($__internal_172b7a757ed166818cf040813b3fe498d8266d294ad5c2cb603214258e5ed51c_prof);

        
        $__internal_3b523d5d6e1ca740abf5222545460a5b991b83cfcc5cf554f80c2d0652ebf02e->leave($__internal_3b523d5d6e1ca740abf5222545460a5b991b83cfcc5cf554f80c2d0652ebf02e_prof);

    }

    public function getTemplateName()
    {
        return ":email:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}", ":email:email.txt.twig", "C:\\wamp64\\www\\ligne_rh\\app/Resources\\views/email/email.txt.twig");
    }
}
