<?php

/* @MAUser/Resetting/reset.html.twig */
class __TwigTemplate_318f9126566ec71d7411730bd736f1d1684265f73bc6134d83a7c77a4453bae9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Resetting/reset.html.twig", 1);
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
        $__internal_bc339f4646c753371c7e4026c6ff3daa378abf92da79f2225760f98b48b77903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc339f4646c753371c7e4026c6ff3daa378abf92da79f2225760f98b48b77903->enter($__internal_bc339f4646c753371c7e4026c6ff3daa378abf92da79f2225760f98b48b77903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/reset.html.twig"));

        $__internal_2bfd9051ff4ff9d4e9fa5a2f095cb053e34cc33c7e29406e881d51c94a619a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bfd9051ff4ff9d4e9fa5a2f095cb053e34cc33c7e29406e881d51c94a619a27->enter($__internal_2bfd9051ff4ff9d4e9fa5a2f095cb053e34cc33c7e29406e881d51c94a619a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc339f4646c753371c7e4026c6ff3daa378abf92da79f2225760f98b48b77903->leave($__internal_bc339f4646c753371c7e4026c6ff3daa378abf92da79f2225760f98b48b77903_prof);

        
        $__internal_2bfd9051ff4ff9d4e9fa5a2f095cb053e34cc33c7e29406e881d51c94a619a27->leave($__internal_2bfd9051ff4ff9d4e9fa5a2f095cb053e34cc33c7e29406e881d51c94a619a27_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_89da1c2dd0060321d863837599c8dd65e19caab78e9351c0f7d528bcd4f320f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89da1c2dd0060321d863837599c8dd65e19caab78e9351c0f7d528bcd4f320f3->enter($__internal_89da1c2dd0060321d863837599c8dd65e19caab78e9351c0f7d528bcd4f320f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f83f0d914dbf49ac1256ef4dd254e25fb9a427c9e02a28bcf4f1e888ed47dcc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83f0d914dbf49ac1256ef4dd254e25fb9a427c9e02a28bcf4f1e888ed47dcc0->enter($__internal_f83f0d914dbf49ac1256ef4dd254e25fb9a427c9e02a28bcf4f1e888ed47dcc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@MAUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_f83f0d914dbf49ac1256ef4dd254e25fb9a427c9e02a28bcf4f1e888ed47dcc0->leave($__internal_f83f0d914dbf49ac1256ef4dd254e25fb9a427c9e02a28bcf4f1e888ed47dcc0_prof);

        
        $__internal_89da1c2dd0060321d863837599c8dd65e19caab78e9351c0f7d528bcd4f320f3->leave($__internal_89da1c2dd0060321d863837599c8dd65e19caab78e9351c0f7d528bcd4f320f3_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Resetting/reset.html.twig";
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
    {% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}", "@MAUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
