<?php

/* @MAUser/Resetting/request.html.twig */
class __TwigTemplate_a24fefbeee48f094e41733b0012b51fa36da7425dc1b4fef153fa5e572744011 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Resetting/request.html.twig", 1);
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
        $__internal_7ea6672ff2e6373126223c41aea0b4c1e250d62a5025c6d4b2e03707a33c43fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea6672ff2e6373126223c41aea0b4c1e250d62a5025c6d4b2e03707a33c43fa->enter($__internal_7ea6672ff2e6373126223c41aea0b4c1e250d62a5025c6d4b2e03707a33c43fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/request.html.twig"));

        $__internal_797e811e10e9891b6e665b2546fbe969e45538f580f4f014a14a7434c02beab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_797e811e10e9891b6e665b2546fbe969e45538f580f4f014a14a7434c02beab4->enter($__internal_797e811e10e9891b6e665b2546fbe969e45538f580f4f014a14a7434c02beab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ea6672ff2e6373126223c41aea0b4c1e250d62a5025c6d4b2e03707a33c43fa->leave($__internal_7ea6672ff2e6373126223c41aea0b4c1e250d62a5025c6d4b2e03707a33c43fa_prof);

        
        $__internal_797e811e10e9891b6e665b2546fbe969e45538f580f4f014a14a7434c02beab4->leave($__internal_797e811e10e9891b6e665b2546fbe969e45538f580f4f014a14a7434c02beab4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_013bddac60e2d77122f7208206ab310a3233b6de47024d246a30b28df7e624cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_013bddac60e2d77122f7208206ab310a3233b6de47024d246a30b28df7e624cf->enter($__internal_013bddac60e2d77122f7208206ab310a3233b6de47024d246a30b28df7e624cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e650a7bb6e4bd2b41b7cc98479e5887f3480619687f903149cc6ba3d507cbf01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e650a7bb6e4bd2b41b7cc98479e5887f3480619687f903149cc6ba3d507cbf01->enter($__internal_e650a7bb6e4bd2b41b7cc98479e5887f3480619687f903149cc6ba3d507cbf01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@MAUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_e650a7bb6e4bd2b41b7cc98479e5887f3480619687f903149cc6ba3d507cbf01->leave($__internal_e650a7bb6e4bd2b41b7cc98479e5887f3480619687f903149cc6ba3d507cbf01_prof);

        
        $__internal_013bddac60e2d77122f7208206ab310a3233b6de47024d246a30b28df7e624cf->leave($__internal_013bddac60e2d77122f7208206ab310a3233b6de47024d246a30b28df7e624cf_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}", "@MAUser/Resetting/request.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
