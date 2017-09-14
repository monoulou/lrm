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
        $__internal_7bf2c750e3e0cf2eab14bbe7515087d833711e2f7ba87b53b199319dc1b192b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bf2c750e3e0cf2eab14bbe7515087d833711e2f7ba87b53b199319dc1b192b9->enter($__internal_7bf2c750e3e0cf2eab14bbe7515087d833711e2f7ba87b53b199319dc1b192b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_8c13199eb9f0c609c39f0d39c6a14fd0a600a62d97cc03508f87d249fa873213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c13199eb9f0c609c39f0d39c6a14fd0a600a62d97cc03508f87d249fa873213->enter($__internal_8c13199eb9f0c609c39f0d39c6a14fd0a600a62d97cc03508f87d249fa873213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bf2c750e3e0cf2eab14bbe7515087d833711e2f7ba87b53b199319dc1b192b9->leave($__internal_7bf2c750e3e0cf2eab14bbe7515087d833711e2f7ba87b53b199319dc1b192b9_prof);

        
        $__internal_8c13199eb9f0c609c39f0d39c6a14fd0a600a62d97cc03508f87d249fa873213->leave($__internal_8c13199eb9f0c609c39f0d39c6a14fd0a600a62d97cc03508f87d249fa873213_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_303291b484f3d138e5cf5fb1e2dc83a1236c2af8277a536fee876b052ef654ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_303291b484f3d138e5cf5fb1e2dc83a1236c2af8277a536fee876b052ef654ae->enter($__internal_303291b484f3d138e5cf5fb1e2dc83a1236c2af8277a536fee876b052ef654ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_229ce7ffef4e530a72eee42082611ae7448dc6c2ac88c252df40523e1fa567c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_229ce7ffef4e530a72eee42082611ae7448dc6c2ac88c252df40523e1fa567c2->enter($__internal_229ce7ffef4e530a72eee42082611ae7448dc6c2ac88c252df40523e1fa567c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_229ce7ffef4e530a72eee42082611ae7448dc6c2ac88c252df40523e1fa567c2->leave($__internal_229ce7ffef4e530a72eee42082611ae7448dc6c2ac88c252df40523e1fa567c2_prof);

        
        $__internal_303291b484f3d138e5cf5fb1e2dc83a1236c2af8277a536fee876b052ef654ae->leave($__internal_303291b484f3d138e5cf5fb1e2dc83a1236c2af8277a536fee876b052ef654ae_prof);

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
