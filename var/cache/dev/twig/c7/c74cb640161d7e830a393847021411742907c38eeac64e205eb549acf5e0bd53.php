<?php

/* @MAUser/Security/login.html.twig */
class __TwigTemplate_e5e905a08de63d190931a289f4e94f996e70e0bbddea65d49a7866cecbbd0d28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Security/login.html.twig", 2);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b7fec49d7fe1a3cf07cef42596ccf2396cc6353732bd32e59350337da09ae04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b7fec49d7fe1a3cf07cef42596ccf2396cc6353732bd32e59350337da09ae04->enter($__internal_2b7fec49d7fe1a3cf07cef42596ccf2396cc6353732bd32e59350337da09ae04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Security/login.html.twig"));

        $__internal_311659ba8603bc85c1edf3bc7c7148f301e6085cef07c6b68690b8c7b453f350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311659ba8603bc85c1edf3bc7c7148f301e6085cef07c6b68690b8c7b453f350->enter($__internal_311659ba8603bc85c1edf3bc7c7148f301e6085cef07c6b68690b8c7b453f350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b7fec49d7fe1a3cf07cef42596ccf2396cc6353732bd32e59350337da09ae04->leave($__internal_2b7fec49d7fe1a3cf07cef42596ccf2396cc6353732bd32e59350337da09ae04_prof);

        
        $__internal_311659ba8603bc85c1edf3bc7c7148f301e6085cef07c6b68690b8c7b453f350->leave($__internal_311659ba8603bc85c1edf3bc7c7148f301e6085cef07c6b68690b8c7b453f350_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66e96977173dc81bf13437d7646689d7d61fa34f4f8cfae21e5ce247f36602ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e96977173dc81bf13437d7646689d7d61fa34f4f8cfae21e5ce247f36602ce->enter($__internal_66e96977173dc81bf13437d7646689d7d61fa34f4f8cfae21e5ce247f36602ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dcfcc2ae0456274f11798323afac312a40bbe146bb025482583faad54a594670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfcc2ae0456274f11798323afac312a40bbe146bb025482583faad54a594670->enter($__internal_dcfcc2ae0456274f11798323afac312a40bbe146bb025482583faad54a594670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_dcfcc2ae0456274f11798323afac312a40bbe146bb025482583faad54a594670->leave($__internal_dcfcc2ae0456274f11798323afac312a40bbe146bb025482583faad54a594670_prof);

        
        $__internal_66e96977173dc81bf13437d7646689d7d61fa34f4f8cfae21e5ce247f36602ce->leave($__internal_66e96977173dc81bf13437d7646689d7d61fa34f4f8cfae21e5ce247f36602ce_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}", "@MAUser/Security/login.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
