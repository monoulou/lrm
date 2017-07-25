<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_e5e905a08de63d190931a289f4e94f996e70e0bbddea65d49a7866cecbbd0d28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 2);
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
        $__internal_ecd481da41cf63a68d244c17af3bb9ea5da9c994acb915c78af133d75db94558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd481da41cf63a68d244c17af3bb9ea5da9c994acb915c78af133d75db94558->enter($__internal_ecd481da41cf63a68d244c17af3bb9ea5da9c994acb915c78af133d75db94558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_8d4ed43680b38433b8c67457c615bc415bce151f804db6527a8344fa6e621823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4ed43680b38433b8c67457c615bc415bce151f804db6527a8344fa6e621823->enter($__internal_8d4ed43680b38433b8c67457c615bc415bce151f804db6527a8344fa6e621823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecd481da41cf63a68d244c17af3bb9ea5da9c994acb915c78af133d75db94558->leave($__internal_ecd481da41cf63a68d244c17af3bb9ea5da9c994acb915c78af133d75db94558_prof);

        
        $__internal_8d4ed43680b38433b8c67457c615bc415bce151f804db6527a8344fa6e621823->leave($__internal_8d4ed43680b38433b8c67457c615bc415bce151f804db6527a8344fa6e621823_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb51b5c57d0cd393956b5ae40f4a1d28cb27476aefc7ea689d5b5b86e1a690c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb51b5c57d0cd393956b5ae40f4a1d28cb27476aefc7ea689d5b5b86e1a690c9->enter($__internal_eb51b5c57d0cd393956b5ae40f4a1d28cb27476aefc7ea689d5b5b86e1a690c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_748cee834ac86cd7ad19cb7e28e9c9c69c88b8b41a34e0915ebea193bda81e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748cee834ac86cd7ad19cb7e28e9c9c69c88b8b41a34e0915ebea193bda81e21->enter($__internal_748cee834ac86cd7ad19cb7e28e9c9c69c88b8b41a34e0915ebea193bda81e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_748cee834ac86cd7ad19cb7e28e9c9c69c88b8b41a34e0915ebea193bda81e21->leave($__internal_748cee834ac86cd7ad19cb7e28e9c9c69c88b8b41a34e0915ebea193bda81e21_prof);

        
        $__internal_eb51b5c57d0cd393956b5ae40f4a1d28cb27476aefc7ea689d5b5b86e1a690c9->leave($__internal_eb51b5c57d0cd393956b5ae40f4a1d28cb27476aefc7ea689d5b5b86e1a690c9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
{% endblock fos_user_content %}", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
